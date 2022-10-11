<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Receta> $recetas
 */
?>
<div class="recetas index content">
    <?= $this->Html->link(__('Nueva Receta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recetas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Título') ?></th>
                    <th><?= $this->Paginator->sort('Descripción') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th><?= $this->Paginator->sort('Creación') ?></th>
                    <th><?= $this->Paginator->sort('Edición') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recetas as $receta): ?>
                <tr>
                    <td><?= $this->Number->format($receta->id) ?></td>
                    <td><?= h($receta->titulo) ?></td>
                    <td><?= h($receta->descripcion) ?></td>
                    <td>
                        <?= $this->Html->image('\Recetas'.$receta->imagen, array('width'=>100))?>
                    </td>
                    <td><?= h($receta->created) ?></td>
                    <td><?= h($receta->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $receta->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $receta->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $receta->id], ['confirm' => __('Está seguro que desea eliminar la receta # {0}?', $receta->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Previo')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrabdo {{current}} record(s) de {{count}}')) ?></p>
    </div>
</div>
