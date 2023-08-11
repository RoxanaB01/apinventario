
                   
                   
                   <div class="form-group">
                      <label for="exampleInputName1">Nombre:</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">precio venta </label>
                      <input type="number" name="sell_price" class="form-control" id="exampleInputEmail3" placeholder="ingrese el precio" required>
                      
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputEmail3">Categoria</label>
                      <select name="category_id" id="category_id" class="form-control">
                       @foreach($categories as $category)
                       <option value="{{$category->id}}">{{$category->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">provedor</label>
                      <select name="provider_id" id="provider_id" class="form-control">
                       @foreach($providers as $provider)
                       <option value="{{$provider->id}}">{{$provider->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">imagen</label>
                      <div class="custom-file">
  <input type="file" name="images" class="custom-file-input" id="images" lang="es">
  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
</div>
                    </div>
