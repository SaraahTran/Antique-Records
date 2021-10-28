<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record[]|\Cake\Collection\CollectionInterface $records
 */
?>
<div class="records index content">
    <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'button-slide-left']) ?>
    <h3><?= __('Records') ?></h3>


<div class="content">
    <div class="row"> <div class="column">
            <?= $this->Form->create(null, ['type' => 'get']) ?>
            <fieldset>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('artist');
                ?>


        </div>
        <div class="column">
            <?php
            echo $this->Form->control('year',[
                'min' => 1963,
                'max' => date('Y')
            ]);

            ?><br><br>
            <?php
            $genre = array('Blues' => 'Blues', 'Jazz' => 'Jazz', 'Rhythm and Blues' => 'Rhythm and Blues', 'Rock and Roll' => 'Rock and Roll', 'Rock' => 'Rock', 'Country' => 'Country', 'Soul' => 'Soul', 'Dance' => 'Dance', 'Hip-Hop' => 'Hip-Hop');


            echo $this->Form->select('genre', $genre, array('class' => 'form-control genre', 'placeholder' => 'Genre', 'id' => 'genre', 'empty' => 'Select Genre'));
           ?>

            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
           </div>

    </div>

<hr>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('artist') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('genre') ?></th>
                    <th><?= $this->Paginator->sort('Number_of_Discs') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                <tr>
                    <td><?= $this->Number->format($record->id) ?></td>
                    <td><?= h($record->name) ?></td>
                    <td><?= h($record->artist) ?></td>
                    <td><?= h($record->year) ?></td>
                    <td><?= h($record->genre) ?></td>
                    <td><?= $this->Number->format($record->no_of_disc) ?></td>
                    <td class="actions">
                        <ul class="action">
                     <li>  <?= $this->Html->link(__('View'), ['action' => 'view', $record->id]) ?></li>
                          <li>  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->id]) ?></li>
                       <li> <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?></li>
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
