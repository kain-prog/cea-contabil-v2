function submitForm2() {

    const form = document.getElementById('form-2');
    document.getElementById('submitButton-2').disabled = true;
    document.getElementById('submitButtonText-2').classList.add('hidden')
    document.getElementById('loadingSpinner-2').classList.remove('hidden');
    form.submit();
}