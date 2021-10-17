async function uploadFile() {
    let formData = new FormData();           
    formData.append("file", fileupload.files[0]);
    await fetch('/hostsrc.php', {
      method: "POST", 
      body: formData
    });    
    alert('The file has been uploaded successfully.');
}
