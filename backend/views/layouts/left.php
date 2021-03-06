


<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/admin.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'], 'items' => [
                    ['label' => 'Главная страница', 'icon' => 'home', 'url' => ['/'], 'active' => $this->context->id == 'site'],
                    ['label' => 'Фильмы', 'icon' => 'film', 'url' => ['/films'], 'active' => $this->context->id == 'films'],
                ],
            ]) ?>
    </section>
</aside>
