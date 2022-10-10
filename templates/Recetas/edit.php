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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $receta->id],
                ['confirm' => __('Está seguro que desea eliminar la receta # {0}?', $receta->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Recetas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recetas form content">

            <?= $this->Form->create($receta, ['type'=>'file']) ?>

            <fieldset>
                <legend><?= __('Editar Receta') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('descripcion');?>

                    <?= $this->Html->image('\Recetas'.$receta->imagen, array('width'=>100))?>

                    <?php echo $this->Form->control('imagen',['type'=>'file', 'required'=>false]);
                ?>
            </fieldset>
<<<<<<< HEAD
            <?= $this->Form->button(__('Guardar cambios')) ?>
=======
            <?= $this->Form->button(__('Actualizar')) ?>
>>>>>>> develop
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
