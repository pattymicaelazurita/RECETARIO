<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receta $receta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Editar Receta'), ['action' => 'edit', $receta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Receta'), ['action' => 'delete', $receta->id], ['confirm' => __('Está seguro que desea eliminar la receta # {0}?', $receta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Recetas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
<<<<<<< HEAD
            <?= $this->Html->link(__('Agregar Receta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
=======
            <?= $this->Html->link(__('Nueva Receta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
>>>>>>> develop
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recetas view content">
            <h3><?= h($receta->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Título') ?></th>
                    <td><?= h($receta->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripción') ?></th>
                    <td><?= h($receta->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagen') ?></th>
                    <td><?= $this->Html->image('\Recetas'.$receta->imagen, array('width'=>100))?></td>
                    
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($receta->id) ?></td>
                </tr>
                <tr>
<<<<<<< HEAD
                    <th><?= __('Creacción') ?></th>
=======
                    <th><?= __('Creación') ?></th>
>>>>>>> develop
                    <td><?= h($receta->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Edición') ?></th>
                    <td><?= h($receta->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
