<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Color $color
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Color'), ['action' => 'edit', $color->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Color'), ['action' => 'delete', $color->id], ['confirm' => __('Are you sure you want to delete # {0}?', $color->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Color'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="colors view content">
            <h3><?= h($color->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cor') ?></th>
                    <td><?= h($color->cor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($color->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
