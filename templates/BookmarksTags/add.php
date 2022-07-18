<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BookmarksTag $bookmarksTag
 * @var \Cake\Collection\CollectionInterface|string[] $bookmarks
 * @var \Cake\Collection\CollectionInterface|string[] $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bookmarks Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookmarksTags form content">
            <?= $this->Form->create($bookmarksTag) ?>
            <fieldset>
                <legend><?= __('Add Bookmarks Tag') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
