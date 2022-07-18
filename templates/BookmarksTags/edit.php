<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BookmarksTag $bookmarksTag
 * @var string[]|\Cake\Collection\CollectionInterface $bookmarks
 * @var string[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bookmarksTag->bookmark_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarksTag->bookmark_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bookmarks Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookmarksTags form content">
            <?= $this->Form->create($bookmarksTag) ?>
            <fieldset>
                <legend><?= __('Edit Bookmarks Tag') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
