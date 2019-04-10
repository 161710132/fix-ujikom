<div id="aktifModal" class="modal fade aktifModal" role="dialog" aria-hidden="true" tabindex="-1">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="post" id="bank-modal" enctype="multipart/form-data">
            <div class="modal-header" style="background-color: #3498db; border-radius: 5px 5px 0px 0px;">
               <h4 class="modal-title" >Perpanjang Kontrak
                  <button type="button" class="close" data-dismiss="modal" >&times;</button>
               </h4>
            </div>

            <div class="modal-body">
               {{ csrf_field() }}
               {{ method_field('POST') }}
               <span id="form_output"></span>

               <input type="hidden" name="id" id="id">

               <div class="form-group row {{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Mulai </label>
              <div class="col-sm-8">  
              <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"  required>
              @if ($errors->has('tgl_mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_mulai') }}</strong>
                            </span>
                        @endif
            </div>
          </div>

            <div class="form-group row {{ $errors->has('tgl_akhir') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Akhir</label> 
              <div class="col-sm-8">
              <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control"  required>
              @if ($errors->has('tgl_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_akhir') }}</strong>
                            </span>
                        @endif
            </div>
          </div>

         		<div class="modal-footer">
                  <button class="btn btn-success" type="submit">Send</button>
         		</div>

            </div>
         </form>
      </div>
   </div>
</div>