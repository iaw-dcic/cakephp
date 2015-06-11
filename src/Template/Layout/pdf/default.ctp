
<!DOCTYPE html>
<html>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
    </header>
    <div id="container">

        <div id="content">
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
</body>
</html>
