<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BookmarksTag $bookmarksTag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bookmarks Tag'), ['action' => 'edit', $bookmarksTag->bookmark_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bookmarks Tag'), ['action' => 'delete', $bookmarksTag->bookmark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarksTag->bookmark_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bookmarks Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bookmarks Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookmarksTags view content">
            <h3><?= h($bookmarksTag->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bookmark') ?></th>
                    <td><?= $bookmarksTag->has('bookmark') ? $this->Html->link($bookmarksTag->bookmark->title, ['controller' => 'Bookmarks', 'action' => 'view', $bookmarksTag->bookmark->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tag') ?></th>
                    <td><?= $bookmarksTag->has('tag') ? $this->Html->link($bookmarksTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $bookmarksTag->tag->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
