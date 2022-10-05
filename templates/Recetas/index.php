<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Receta> $recetas
 */
?>
<div class="recetas index content">
    <?= $this->Html->link(__('New Receta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recetas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recetas as $receta): ?>
                <tr>
                    <td><?= $this->Number->format($receta->id) ?></td>
                    <td><?= h($receta->titulo) ?></td>
                    <td><?= h($receta->descripcion) ?></td>
                    <td><?= h($receta->imagen) ?></td>
                    <td><?= h($receta->created) ?></td>
                    <td><?= h($receta->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $receta->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receta->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receta->id)]) ?>
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
