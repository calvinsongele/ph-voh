<section class='container'>
    
</section>
<?php require 'public/includes/admin-modals.inc.php' ?>
<script src="/public/js/jquery-3.7.js"></script>
<script src="/public/js/popper.min.js"></script> 
<script src="/public/js/bootstrap.bundle.4.5.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/public/js/dashb-main.js"></script> 
<script>
    const fileInput = document.getElementById('file');
        const fileUploadLabel = document.getElementById('fileUploadLabel');
        const filesUploadedContainer = document.getElementById('filesUploaded');
        
        fileUploadLabel.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileUploadLabel.classList.add('drag-over');
        });
        
        fileUploadLabel.addEventListener('dragleave', () => {
            fileUploadLabel.classList.remove('drag-over');
        });
        
        fileUploadLabel.addEventListener('drop', (e) => {
            e.preventDefault();
            fileUploadLabel.classList.remove('drag-over');
            console.log(e);
            const files = e.dataTransfer.files;
            handleFiles(files);
        });
        
        fileInput.addEventListener('change', () => {
            const file = fileInput.files;
            handleFiles(file);
        });
        
        


</script>