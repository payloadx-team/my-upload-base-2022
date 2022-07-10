<!DOCTYPE html>
<html>
<input id="fileupload" type="file" name="fileupload" />
<button id="upload-button" onclick="uploadFile()"> host! </button>
<script>
async function uploadFile() {
    let formData = new FormData();           
    formData.append("file", fileupload.files[0]);
    await fetch('scripts/download.php', {
      method: "POST", 
      body: formData
    });    
    alert('The file has been uploaded successfully.');
}
</script>
</html>
