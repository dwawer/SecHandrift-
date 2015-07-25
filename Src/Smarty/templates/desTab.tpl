<section id="productdesc" class="row">
    <div class="container">
      <div class="productdesc">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#description">商品详情</a>
          </li>
          <li><a href="#specification">留言</a>
          </li>
          
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="description">
            <h2>{$name}</h2>
            {$description} <br>
            <br>
            
          </div>
          <div class="tab-pane " id="specification">
            <ul class="productinfo">
			{$content}       
            </ul>
			<div class="control-group">
                     
                    </div>
			<section class="leavecomment">
                
               <form name="message" action="messageSubmit.php?id={$id}" method="post">
                    <div class="control-group">
                      <label class="control-label" >我要评论</label>
                      <div class="controls">
                        <textarea name="massagebox" id="message" style="width:700px;overflow-x:visible;overflow-y:visible;"  class="required"></textarea>
                      </div>
                    </div>
                    <div class="controls">
                      <input type="submit" name="public_message" id="submit_id" value="提交" class="btn btn-orange">
                      
                    </div>
               </form>   
              </section>
            
          </div>
          
          
        </div>
      </div>
    </div>
  </section>