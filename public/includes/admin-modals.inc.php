

<div class="modal fade" id="upload_img_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <style>
        .active_img img, .active_img video, .active_img audio, .active_img a {
            border:5px double var(--blend);
            
        }
        .hidden {
            display:none!important;
        }
    </style>
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Media Files</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <link href='/public/css/file-upload.css' rel='stylesheet'>
         <!----------------------------------------------------------->
          <div class="alert card">
              
              <section class='mb-2'>
                 <ul class="list-group list-group-horizontal">
                  <li class="list-group-item mclick  " rel='upload-files' >Upload Files</li>
                  <li class="list-group-item mclick" rel='media-library' >Media Library</li>
                  <!--<li class="list-group-item mclick" rel='edit-image'>Edit Image</li>-->
                </ul>
              </section>
              <section id='upload-files' class='media-blocks hidden'>
                  
                  <div class="file-upload-container">
                    <h1 class='drag_n_drop'> Drag and Drop File to Upload </h1>
                    <div class="file-upload">
        
                        <form class="file-upload-form" id="fileUploadForm">
                            <label for="file" class="file-upload-label" id="fileUploadLabel">
                                <div class="file-upload-design">
                                    <svg viewBox="0 0 640 512" height="1em">
                                        <path
                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                                        ></path>
                                    </svg>
                                    <p>Drag and Drop</p>
                                    <p>or</p>
                                    <span class="browse-button">Browse file</span>
                                </div>
                                <input id="file" type="file" multiple />
                            </label>
                        </form>
                    </div>
                    <div class="files-uploaded" id="filesUploaded">
        
                    </div>
                    
        
                        
                </div>
        
             </section>
              <section id='media-library' class='media-blocks hidden'> 
                <div class='row'>
                    <div class='col-md-9'><div class='display_all_imgs' style='max-height:400px; overflow:auto; ' ></div></div>
                    <div class='col-md-3'>
                        <div class='alertx alert-smx' style='background:var(--lightgrey);padding:7px'>
                            <div class='toggleimgview hidden'>
                                <div class='imgdetls'>
                                    <img class='' src='' style='height:70px;width:auto' >
                                 
                                    <div class='imagedata ml-1'>
                                        <span class='imgname'> </span> <br>
                                        <span class='imgdate'> </span><br>
                                        <span class='imgsize'> </span><br>
                                        <span class='imgdim'> </span><br>
                                        <input value='' class='selectimgid' type='hidden'>
                                        <span class='pointer  text-danger del_submitted_image' rel='' >Delete permanently</span>
                                    </div>
                                </div>
                                <div class='mt-2'>
                                    <label>Alt Text/Caption</label>
                                    <textarea class='change-alt-text form-control'></textarea><br>
                                    <label>File URL</label>
                                    <input class='imgurl form-control' value='' readonly 
                                        class='form-control' id='copyLinkToClipboard'> 
                                     <span class='mt-2 pointer btn-sm btn-block btn-danger copy_submitted_image text-center '>Copy URL</span>
                                </div>
                                
                                <div class='mt-2' style='bottom:0!important' >
                                    <button type="button" class="btn btn-primary btn-block use_submitted_image hidden" clname='' prevname='' ><span class='selectimg'></span> <i class='fa fa-check-circle'></i> Use Selected File </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <section id='edit-image' class='media-blocks hidden'>edit</section>
               
            
                
            <hr>
              
               
          </div>
         <!----------------------------------------------------------->
      </div>
      <div class="modal-footer">
          <!--<span class='selectimgid hidden'  ></span>-->
          <input value='' type='hidden' class='viewimgid'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        
      </div>
    </div>
  </div>
</div>
