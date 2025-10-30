function toggleSupportingDocumentVisibility() {
    const selectType = document.getElementById('type');
    const uploadSupportingDocument = document.getElementById('upload_supporting_document');

    if (selectType.value === 'supporting document') {
        uploadSupportingDocument.style.display = 'block';
    } else {
        uploadSupportingDocument.style.display = 'none';
    }

    
}

toggleSupportingDocumentVisibility();

const selectType = document.getElementById('type');
selectType.addEventListener('change', toggleSupportingDocumentVisibility);