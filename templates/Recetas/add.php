<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receta $receta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Recetas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recetas form content">
            
            <?= $this->Form->create($receta, ['type'=>'file'] ) ?>
            
            <fieldset>
                <legend><?= __('Add Receta') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('imagen',['type'=>'file']);
                ?>
            </fieldset>

            <?= $this->Form->button(__('Submit')) ?>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
