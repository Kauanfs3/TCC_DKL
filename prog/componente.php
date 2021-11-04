<?php

function component($nomeproduto, $valorproduto, $imgproduto, $idproduto){
    $element="
    <div class=\"item\">
    <form action=\"index.php\" method=\"post\">
                  <div class=\"card\">
                    <div class=\"imgBx\">
                    <img src=\"../img/$imgproduto\">
                      <ul class=\"action\">
                        <li>
                          <button type=\"submit\"  class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
                          <input type='hidden'  name='id_produto' value='$idproduto'>
                        </li>
                        <li>
                          <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                          <span>Ver detalhes</span>
                        </li>
                      </ul>
                    </div>
                    <div class=\"content\">
                      <div class=\"productName\">
                        <h3>$nomeproduto</h3>
                      </div>
                      <div class=\"price_rating\">
                        <h2>R$$valorproduto,00</h2>
                      </div>
                    </div>
                  </div>
                  </form>
               </div>
";
echo $element;

}

function cartElement($imgproduto,$nomeproduto, $valorproduto, $idproduto){
  $element ="

  <form action  =\"../app/sacola.php?action=remove&id=$idproduto\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"../img/$imgproduto\" alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$nomeproduto</h5>
                                <h5 class=\"pt-2\">$$valorproduto</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Salvar</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remover</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
      </form>
    
    ";
    echo $element;
}





?>