<?
include_once "../model/functions.php";
if($_POST) {
    $id = $_POST['lastItem'];

    $rowCount=$db->query("SELECT COUNT(*) FROM goods")->fetchColumn();

    if($id == $rowCount){
        exit();
    }

    $goods = getAll($db,'goods',$id);
    
foreach ($goods as $good) { ?>
    <div class="progects-blocks-item"  data-id="<?=$good['id']?>">
        <a href="../public/showItem.php?id=<?= $good["id"] ?>" target="_blank"><img src="<?= $good["path"] ?>"
                                                                                    alt="<?= $good["name"] ?>"
                                                                                    width="370px" height="237px"></a>
        <div class="progects-blocks-item-wrp progects-blocks-item-wrp-catalog">
            <a href="../public/showItem.php?id=<?= $good["id"] ?>" target="_blank" class="progects-blocks-item-wrp-a">
                <h3 class="progects-blocks-item-wrp-title progects-blocks-item-wrp-title-catalog"><?= $good["name"] ?></h3>
            </a>
            <p class="progects-blocks-item-wrp-text progects-blocks-item-wrp-text-catalog"><?= $good["price"] ?></p>
            <p><?= $good["smallDesc"] ?></p>
            <button class="buy-btn"><span class="buy-btn-txt">Buy</span>
            </button>
        </div>
    </div>
    <?
}}?>
