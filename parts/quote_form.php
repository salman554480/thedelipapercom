<form id="quoteForm" enctype="multipart/form-data">
    <div class="row justify-content-start quote-content ">
        <div class="col-xl-6">
            <div class="form-group mb-0">
                <label for="">Name</label>
                <input type="text" class="form-control input-field" name="name">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group mb-0">
                <label for="">Email</label>
                <input type="email" class="form-control input-field" name="email">
            </div>
        </div>
        <div class="col-xl-12">
            <div class="form-group mb-0">
                <label for="">Contact No.</label>
                <input type="text" class="form-control input-field" name="contact">
            </div>
        </div>
        <div class="col-xl-12">
            <div class="form-group mb-0">
                <label for="">Standard Size</label>
                <select class="form-control input-field" name="standard_size">
                    <option value="4″ x 4″" class="">4″ x 4″</option>
                    <option value="5″ x 5″" class="">5″ x 5″</option>
                    <option value="6” x 5″" class="">6” x 5” </option>
                    <option value="6″ x 6″" class="">6″ x 6″</option>
                    <option value="7” x 5”" class="">7” x 5”</option>
                    <option value="7” x 7”" class="">7” x 7”</option>
                    <option value="8” x 6” " class="">8” x 6” </option>
                    <option value="8” x 5”" class="">8” x 5”</option>
                    <option value="8” x 8”" class="">8” x 8”</option>
                    <option value="8.5” x 11”" class="">8.5” x 11”</option>
                    <option value="9″ x 5″" class="">9″ x 5″</option>
                    <option value="9″ x 6″" class="">9″ x 6″</option>
                    <option value="9” x 9”" class="">9” x 9”</option>
                    <option value="10″ x 5″" class="">10″ x 5″</option>
                    <option value="10″ x 6″" class="">10″ x 6″</option>
                    <option value="10″ x 8″" class="">10″ x 8″</option>
                    <option value="10″ x 10″" class="">10″ x 10″</option>
                    <option value="10.75″ x 10″" class="">10.75″ x 10″</option>
                    <option value="12″ x 6″" class="">12″ x 6″</option>
                    <option value="12″ x 8″" class="">12″ x 8″</option>
                    <option value="12″ x 9″" class="">12″ x 9″</option>
                    <option value="12″ x 10″" class="">12″ x 10″</option>
                    <option value="12″ x 12″" class="">12″ x 12″</option>
                    <option value="13″ x 6″" class="">13″ x 6″</option>
                    <option value="13″ x 9″" class="">13″ x 9″</option>
                    <option value="13″ x 10″" class="">13″ x 10″</option>
                    <option value="13″ x 13″" class="">13″ x 13″</option>
                    <option value="14” x 12”" class="">14” x 12”</option>
                    <option value="15″ x 9″" class="">15″ x 9″</option>
                    <option value="15″ x 10.75″" class="">15″ x 10.75″</option>
                    <option value="15″ x 12″" class="">15″ x 12″</option>
                    <option value="15″ x 13″" class="">15″ x 13″</option>
                    <option value="16” x 12”" class="">16” x 12”</option>
                    <option value="17” x 11”" class="">17” x 11”</option>
                    <option value="18” x 10”" class="">18” x 10”</option>
                    <option value="18” x 12”" class="">18” x 12”</option>
                    <option value="18” x 13”" class="">18” x 13”</option>
                    <option value="20″ x 10″ " class="">20″ x 10″ </option>
                    <option value="20” x 12”     " class="">20” x 12” </option>
                    <option value="20″ x 13″    " class="">20″ x 13″ </option>
                </select>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="form-group mb-0">
                <label for="">Printing</label>
                <select class="form-control input-field " name="printing" required="required">
                    <option value="4- Color" class="">4- Color</option>
                    <option value="2 Color" class="">2 Color</option>
                    <option value="1 Color" class="">1 Color</option>
                </select>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="form-group mb-0">
                <label for="">Paper</label>
                <select class="form-control input-field " required="required" name="paper">
                    <option value="White" class="">White</option>
                    <option value="	Kraft" class="">Kraft</option>
                </select>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="form-group mb-0">
                <label for="">Quantity</label>
                <input type="text" class="form-control input-field" name="quantity" id="">
            </div>
        </div>
        <div class="col-xl-12">
            <div class="form-group mb-0">
                <label for="">Upload Logo File</label>
                <input type="file" class="form-control input-field" name="logo_file" id="">
            </div>
        </div>
        <div class="col-xl-12">
            <div class="form-group mb-0">
                <label for="">For Custom size / More information</label>
                <textarea name="custom_info" class="form-control input-field" rows="3" placeholder="Type Here"
                    id=""></textarea>
            </div>
        </div>
        <!-- <div class="col-xl-6">
                                <div class="bg-white p-3 mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">I'm not a robot</label>
                                        </div>
                                        <img src="<?php echo $website_url ?>/assets/images/recaptcha.png"
                                            style="width: 70px;" alt="">
                                    </div>
                                </div>
                            </div>-->
        <div class="col-xl-12 mt-3">
            <button id="submitBtn" class="btn btn-send col-xl-8 d-flex justify-content-center mt-3 m-auto" type="submit">Send</button>
        </div>
        
        <!-- Response message container -->
        <div id="responseMessage" class="col-xl-12 mt-3" style="display: none;">
            <div class="alert" role="alert"></div>
        </div>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle form submission with AJAX
    document.getElementById('quoteForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = document.getElementById('submitBtn');
        const responseMessage = document.getElementById('responseMessage');
        const responseAlert = responseMessage.querySelector('.alert');
        
        // Disable submit button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status"></span>Sending...';
        
        // Hide previous messages
        responseMessage.style.display = 'none';
        
        // Get form data
        const formData = new FormData(this);
        
        // Add current URL to track form submission source
        formData.append('current_url', window.location.href);
        
        // Send AJAX request with FormData (for file uploads)
        console.log('Sending AJAX request with FormData from:', window.location.href);
        fetch('process_quote.php', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
                // Don't set Content-Type for FormData - let browser set it with boundary
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Show response message
            responseMessage.style.display = 'block';
            responseAlert.className = 'alert ' + (data.success ? 'alert-success' : 'alert-danger');
            responseAlert.textContent = data.message;
            
            if (data.success) {
                // Reset form on success
                document.getElementById('quoteForm').reset();
            } else {
                // Re-enable submit button on error
                submitBtn.disabled = false;
                submitBtn.textContent = 'Send';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            responseMessage.style.display = 'block';
            responseAlert.className = 'alert alert-danger';
            responseAlert.textContent = 'An error occurred. Please try again.';
            
            // Re-enable submit button
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send';
        })
        .finally(() => {
            // Reset button text
            if (submitBtn.disabled) {
                submitBtn.innerHTML = 'Send';
            }
        });
    });
});
</script>