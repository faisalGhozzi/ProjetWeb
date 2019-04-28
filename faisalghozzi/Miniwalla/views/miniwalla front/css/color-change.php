<?php
    include_once "C:/xampp/htdocs/Miniwalla/core/elasticC.php";
    header('Content-type: text/css; charset:UTF-8');
    $elastic1C = new ElasticC();
    $listeElastique = $elastic1C->afficherElastiques();
?>
.left-column{
    width: 65%;
    position : relative;
    display : none;
}

.product-color {
    margin-bottom:30px;
}

.color-choose div{
    display: inline-block;
}

.color-choose input[type="radio"] {
    display: none;
}

.color-choose input[type="radio"] + label span{
    display : inline-block;
    width: 40px;
    height: 40px;
    margin : -1px 4px 0 0 ;
    vertical-align: middle;
    cursor : pointer;
    border-radius : 50%;
}
<?php foreach( $listeElastique as $rowE) :?>
.color-choose input[type="radio"]<?php echo '#'.substr($rowE['elastic_img'],0,-4);?> + label span {
    background-image: url('../images/thumbs/<?php echo $rowE['elastic_img'];?>');
}
<?php endforeach ?>

.color-choose input[type="radio"]:checked + label span {
    background-image: url('../images/check-icn.svg');
    background-repeat : no-repeat;
    backgroun-position : center;
}
.color-color {}