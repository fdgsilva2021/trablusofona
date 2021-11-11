<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->matricula], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->matricula], ['confirm' => __('Are you sure you want to delete # {0}?', $car->matricula), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Car'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars view content">
            <h3><?= h($car->matricula) ?></h3>
            <table>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($car->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricula') ?></th>
                    <td><?= h($car->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cor') ?></th>
                    <td><?= h($car->cor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($car->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
