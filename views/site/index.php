<?php
    /* @var $this yii\web\View */

    $this->title = 'LiveDune.test';
    use yii\widgets\LinkPager;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>База данных Клиентов</h1>
    </div>

    <div class="body-content">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">User id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Payment</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($billings as $billing):  ?>
                <tr>
                    <th scope="row"><?= $billing->user->id?></th>
                    <td><?= $billing->user->first_name ?></td>
                    <td><?= $billing->user->last_name ?></td>
                    <td><?= $billing->user->phone ?></td>
                    <td><?= $billing->payment_sum ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
