<?php $this->assign('title', $pad->name . " ({$notes->count()})"); ?>
<table class="notes">
    <tr>
    <th class="note">Note <?= $this->Html->link('↑', ['_name' => 'index', 'order' => '-name'], ['class' => 'sort_arrow']) ?><?= $this->Html->link('↓', ['_name' => 'index', 'order' => 'name'], ['class' => 'sort_arrow']) ?></th>
      <th>Pad</th>
      <th class="date">Last modified <?= $this->Html->link('↑', ['_name' => 'index', 'order' => '-updated_at'], ['class' => 'sort_arrow']) ?><?= $this->Html->link('↓', ['_name' => 'index', 'order' => 'updated_at'], ['class' => 'sort_arrow']) ?></th>
    </tr>
    <?php foreach($notes as $note): ?>
        <tr>
          <td><?= $this->Html->link($note->name, ['id' => $note->id, '_name' => 'view_note']) ?></td>
          <td class="pad"><?= $note->pad ? $note->pad->name : 'No pad'; ?></td>
          <td class="hidden-text date"><?= $note->updated_at; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
<?= $this->Html->link("New note", ["_name" => "create_note", "pad" => $pad->id], ["class" => "button"]); ?>