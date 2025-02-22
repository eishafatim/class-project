<?php
include('connection.php');
$catImageAdd = "img/categories/";
$proImageAdd = "img/products/";

// addcategory
if(isset($_POST['addCategory'])){
$catName = $_POST['catName'];
$catImageName = $_FILES['catImage']['name'];
$fileObject = $_FILES['catImage']['tmp_name'];
$directory = 'img/categories/'.$catImageName;
$extension = pathinfo($catImageName, PATHINFO_EXTENSION);
if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
if(move_uploaded_file($fileObject,$directory)){
    $query = $pdo ->prepare("insert into categories(name,image)values(:pn,:pi)");
        $query->bindParam("pn",$catName);
        $query->bindParam("pi",$catImageName);
        $query->execute();
        echo "<script>
    alert('inserted');
    </script>";

}else{
    echo "<script>
    alert('invaild file address');
    </script>";
}
}else{
    echo "<script>
    alert('invaild file extension');
    </script>";
}
}
// updateCategory
if(isset($_POST['updateCategory'])){
    $catId = $_POST['catId'];
    $catName = $_POST['catName'];
    if(!empty($_FILES['catImage']['name'])){
        $catImageName = $_FILES['catImage']['name'];
        $fileObject = $_FILES['catImage']['tmp_name'];
        $directory = 'img/categories/'.$catImageName;
        $extension = pathinfo($catImageName, PATHINFO_EXTENSION);
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
        if(move_uploaded_file($fileObject,$directory)){
            $query = $pdo ->prepare("update categories set name = :cn,image=:ci where catId = :cid");
            $query->bindParam("cid",$catId);
                $query->bindParam("cn",$catName);
                $query->bindParam("ci",$catImageName);
                $query->execute();
                echo "<script>
            alert('category updated');
            </script>";
        
        }else{
            echo "<script>
            alert('invaild file address');
            </script>";
        }
        }else{
            echo "<script>
            alert('invaild file extension');
            </script>";
        }
    }else{
        $query = $pdo ->prepare("update categories set name = :cn where catId = :cid");
        $query->bindParam("cid",$catId);
            $query->bindParam("cn",$catName);
            $query->execute();
            echo "<script>
        alert('category updated');
        </script>";
    }
  
}
// delete 
if(isset($_POST['deleteCategory'])){
    $catId = $_POST['catId'];
    $query = $pdo ->prepare("delete from categories where catId = :pid");
    $query->bindParam("pid",$catId);
    $query->execute();
    echo "<script>
        alert('category Deleted');
        </script>
    ";
}
// add product 
if(isset($_POST['addProduct'])){
    
    $pName = $_POST['pName'];
    $pPrice = $_POST['pPrice'];
    $pQuantity = $_POST['pQuantity'];
    $pDescription = $_POST['pDescription'];
    $pCatId = $_POST['pCatId'];
    $pImageName = $_FILES['pImage']['name'];
    $pTmpName = $_FILES['pImage']['tmp_name'];
    $proPath = "img/products/".$pImageName;
    $extension = pathinfo($pImageName,PATHINFO_EXTENSION);
    if($extension == "jpg" ||
    $extension == "jpeg" ||
    $extension == "png" ||
    $extension == "webp"
    
    ){
        if(move_uploaded_file($pTmpName,$proPath)){
            $query = $pdo ->prepare("insert into products (product_name,product_price,product_quantity,product_description,product_image,product_cat_id)values(:pn,:pp,:pq,:pd,:pi,:pci)");
            $query->bindParam("pn",$pName);
            $query->bindParam("pp",$pPrice);
            $query->bindParam("pq",$pQuantity);
            $query->bindParam("pd",$pDescription);
            $query->bindParam("pi",$pImageName);
            $query->bindParam("pci",$pCatId);
        
            $query ->execute();

  echo "<script>
        alert('product added');
        </script>
    ";
        }else{
            echo "<script>
            alert('invaild file address');
            </script>";
        }
        }else{
            echo "<script>
            alert('invaild file extension');
            </script>";
        
    }
}
// updateProduct
if(isset($_POST['updateProduct'])){
    $pid = $_POST['pId'];
    $pName = $_POST['pName'];
    $pPrice = $_POST['pPrice'];
    $pQuantity = $_POST['pQuantity'];
    $pDescription = $_POST['pDescription'];
    $pCatId = $_POST['pCatId'];
    if(!empty($_FILES['pImage']['name'])){
        $pImageName = $_FILES['pImage']['name'];
    $pTmpName = $_FILES['pImage']['tmp_name'];
    $proPath = "img/products/".$pImageName;
    $extension = pathinfo($pImageName,PATHINFO_EXTENSION);
    if($extension == "jpg" ||
    $extension == "jpeg" ||
    $extension == "png" ||
    $extension == "webp"
    
    ){
        if(move_uploaded_file($pTmpName,$proPath)){
            $query = $pdo ->prepare("update products set product_name = :pn,product_price = :pp,product_quantity = :pq,product_description = :pd,product_cat_id =:pci ,product_image = :pi where product_id = :pid");
            $query->bindParam("pid",$pid);
            $query->bindParam("pn",$pName);
            $query->bindParam("pp",$pPrice);
            $query->bindParam("pq",$pQuantity);
            $query->bindParam("pd",$pDescription);
            $query->bindParam("pi",$pImageName);
            $query->bindParam("pci",$pCatId);
            $query ->execute();

  echo "<script>
        alert('product updated');
        </script>
    ";
        }else{
            echo "<script>
            alert('invaild file address');
            </script>";
        }
        }else{
            echo "<script>
            alert('invaild file extension');
            </script>";
        
    }
    }else{
        $query = $pdo ->prepare("update products set product_name = :pn,product_price = :pp,product_quantity = :pq,product_description = :pd,product_cat_id =:pci where product_id = :pid");
        $query->bindParam("pid",$pid);
        $query->bindParam("pn",$pName);
        $query->bindParam("pp",$pPrice);
        $query->bindParam("pq",$pQuantity);
        $query->bindParam("pd",$pDescription);
        $query->bindParam("pci",$pCatId);
        $query ->execute();
        echo "<script>
        alert('product updated');
        </script>
    ";
    }
}
// deleteProduct
if(isset($_POST['deleteProduct'])){
    $productid = $_POST['proId'];
    $query = $pdo ->prepare("delete from products where product_id =:pid");
    $query ->bindParam("pid",$productid);
    $query->execute();
    echo "<script>
    alert('product deleted');
    </script>
";
}