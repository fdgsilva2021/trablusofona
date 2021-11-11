<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brand $brand
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Brand'), ['action' => 'edit', $brand->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Brand'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Brands'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Brand'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="brands view content">
            <h3><?= h($brand->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($brand->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($brand->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
