<?PHP
class show_categories extends conn{

    function show_categories_no_extras(){
        print('<table class="table">');
            $sth = $this->conn->prepare("SELECT * FROM `tomato220`.`category` ORDER BY `category`.`category` ASC");
            $sth->execute();
            $value = $sth->fetchall(PDO::FETCH_ASSOC);
            $result_count = 0;
            $result_count = sizeof($value);
        if($result_count < 1){
            print('<p>Less than 1</p>');
            }else{
                for($i=0; $i<($result_count); $i++){
                    print('<tr><td>'.$value[$i]['category'].'</td></tr>');

                }
            }
            print('</table>');
    }

/*
    print('<div class="modal fade keyword_edit_modal" id="edit'.$resource[$i]['id'].'" tabindex="-1" role="dialog" aria-labelledby="EditKeyword" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="refresh.keyword.edit.php">
            <div class="form-group">
                <input type="text" class="form-control" value="'.$resource[$i]['keyword'].'" id="keywordedit" name="keywordedit">
                <input type="hidden" name="keywordid" value="'.$resource[$i]['id'].'"/>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>');


  // delete keyword modal
  print('
  <div id="delete' . $resource[$i]['id'] . '" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h2>Really?</h2>
        <p><span class="bigandbad">' . $resource[$i]['keyword'] . '</span> is used on '.$this->number_keyword_used($resource[$i]['id']).' tomato entries</p>
        <form method="post" action="refresh.keyword.delete.php">
        <input type="hidden" name="keyid" value="' . $resource[$i]['id'] . '"/>
          <p><input type="submit" value="Delete"/></p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>');


}
print('</table>');
}  
*/

}

?>