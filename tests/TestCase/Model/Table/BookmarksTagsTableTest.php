<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookmarksTagsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookmarksTagsTable Test Case
 */
class BookmarksTagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookmarksTagsTable
     */
    protected $BookmarksTags;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BookmarksTags',
        'app.Bookmarks',
        'app.Tags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BookmarksTags') ? [] : ['className' => BookmarksTagsTable::class];
        $this->BookmarksTags = $this->getTableLocator()->get('BookmarksTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BookmarksTags);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BookmarksTagsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
