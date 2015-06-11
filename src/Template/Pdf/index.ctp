    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('nombre'); ?></th>
                <th><?= $this->Paginator->sort('objectid'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($juegos as $juego): ?>
                <tr>
                    <td><?= h($juego->nombre) ?></td>
                    <td><?= $this->Number->format($juego->objectid) ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
