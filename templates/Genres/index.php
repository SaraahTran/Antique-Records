<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre[]|\Cake\Collection\CollectionInterface $genres
 */
?>
<div class="genres index content">
    <?= $this->Html->link(__('New Genre'), ['action' => 'add'], ['class' => 'button-slide-left']) ?>
    <h3><?= __('Genres') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($genres as $genre): ?>
                <tr>
                    <td><?= $this->Number->format($genre->id) ?></td>
                    <td><?= h($genre->name) ?></td>
                    <td width="10%" class="actions">
                        <ul class="action">
                            <li>  <?= $this->Html->link(__('View'), ['action' => 'view', $genre->id]) ?></li>
                            <li>  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $genre->id]) ?></li>
                            <li> <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $genre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genre->id)]) ?></li>
                        </ul>
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
