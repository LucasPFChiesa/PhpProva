<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BookmarksTag[]|\Cake\Collection\CollectionInterface $bookmarksTags
 */
?>
<div class="bookmarksTags index content">
    <?= $this->Html->link(__('New Bookmarks Tag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bookmarks Tags') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('bookmark_id') ?></th>
                    <th><?= $this->Paginator->sort('tag_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookmarksTags as $bookmarksTag): ?>
                <tr>
                    <td><?= $bookmarksTag->has('bookmark') ? $this->Html->link($bookmarksTag->bookmark->title, ['controller' => 'Bookmarks', 'action' => 'view', $bookmarksTag->bookmark->id]) : '' ?></td>
                    <td><?= $bookmarksTag->has('tag') ? $this->Html->link($bookmarksTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $bookmarksTag->tag->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bookmarksTag->bookmark_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookmarksTag->bookmark_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookmarksTag->bookmark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarksTag->bookmark_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
