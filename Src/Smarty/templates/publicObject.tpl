

<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->
      <ul class="breadcrumb">
        <li>
          <a href="#">主页</a>
          <span class="divider">/</span>
        </li>
        <li class="active">发布</li>
      </ul>
      <!-- Contact Us-->
	   <form id="publishObject" name="publishObject"
		    action="objectPublish.php" method="post" enctype="multipart/form-data"> 
      <h1 class="heading1"><span class="maintext">发布</span><span class="subtext"> 发布新的物品</span></h1>
      <div class="row">
        <div class="span9">
          <table width:"900px" cellspacing="20" cellspacing="10" method="post">
            <tr>
			<th width:"50"><label class="control-label" >名称<span class="red">*         </span></label></th>
			<td><input type="text" class="" value="{$objnamevalue}" name="objname"></td>			
			</tr>
			
			<tr>
			<th><label class="control-label" >类型<span class="red">*    </span></label></th>
			<td><select name="type">
                    <option value="出售">出售</option>
                    <option value="漂流">漂流</option>
                  </select></td>
			</tr>
			
			<tr>
			<th><label class="control-label" >分类<span class="red">*    </span></label></th>
			<td><select name="classes" >
                    <option value="图书">图书</option>
                    <option value="女装">女装</option>
                    <option value="男装">男装</option>
                    <option value="单车">单车</option>
                    <option value="数码">数码</option>
					<option value="家电">家电</option>
					<option value="日用">日用</option>
                  </select></td>			
			</tr>
			
			<tr>
			<th><label class="control-label" >价格     </label></th>
			<td><input type="text" name="price" value="{$pricevalue}"></td>
			</tr>
			<th><label class="control-label" >所在地<span class="red">     </span></label></th>
			<td><input type="text" class=""  value="">	</td>	
			</tr>
			
			<tr>
			<th><label class="control-label" >成色    </label></th>
			<td><input type="text" class=""  value=""></td>
			</tr>
			<tr>
			<th align="top"><label class="control-label" >上传图片    </label>
			</th>
			 <td><label class="control-label" >{$path}</label>
			     <input type = "file" name="loadpic"></br>
			     <input type="submit" name="upload" value="上传"/> 
			</td>
			只可上传jpg,bmp格式文件，上传图片以最后一个为准。
			</tr>
                
              
			<tr>
			<th><label class="control-label" >描述    </label></th>
			<td><textarea  class="required" rows="6" cols="40" id="message" name="description">
			{$descriptionvalue}</textarea></td>
			</tr>
			 </table>
              <div class="form-actions">
                <input class="btn btn-orange" type="submit" name="public" value="发布" id="submit_id">
                <input class="btn btn-orange" type="reset" value="重置">
              </div>
			  </form>
           
         
        </div>

