<form action="quote-form.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-4">
            <label for="size">Size:</label>
            <select class="form-control" id="size" name="size">
                <option value="NaN">Select Size</option>
                <option value="4x4">4″ x 4″</option>
                <option value="5x5">5″ x 5″</option>
                <option value="6x5">6″ x 5″</option>
                <option value="6x6">6″ x 6″</option>
                <option value="7x5">7″ x 5″</option>
                <option value="7x7">7″ x 7″</option>
                <option value="8x5">8″ x 5″</option>
                <option value="8x6">8″ x 6″</option>
                <option value="8x8">8″ x 8″</option>
                <option value="8.5x11">8.5″ x 11″</option>
                <option value="9x5">9″ x 5″</option>
                <option value="9x6">9″ x 6″</option>
                <option value="9x9">9″ x 9″</option>
                <option value="10x5">10″ x 5″</option>
                <option value="10x6">10″ x 6″</option>
                <option value="10x8">10″ x 8″</option>
                <option value="10x10">10″ x 10″</option>
                <option value="10.75x10">10.75″ x 10″</option>
                <option value="12x6">12″ x 6″</option>
                <option value="12x8">12″ x 8″</option>
                <option value="12x9">12″ x 9″</option>
                <option value="12x10">12″ x 10″</option>
                <option value="12x12">12″ x 12″</option>
                <option value="13x6">13″ x 6″</option>
                <option value="13x9">13″ x 9″</option>
                <option value="13x10">13″ x 10″</option>
                <option value="13x13">13″ x 13″</option>
                <option value="14x12">14″ x 12″</option>
                <option value="15x9">15″ x 9″</option>
                <option value="15x10.75">15″ x 10.75″</option>
                <option value="15x12">15″ x 12″</option>
                <option value="15x13">15″ x 13″</option>
                <option value="16x12">16″ x 12″</option>
                <option value="17x11">17″ x 11″</option>
                <option value="18x10">18″ x 10″</option>
                <option value="18x12">18″ x 12″</option>
                <option value="18x13">18″ x 13″</option>
                <option value="20x10">20″ x 10″</option>
                <option value="20x12">20″ x 12″</option>
                <option value="20x13">20″ x 13″</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="size">Paper Type:</label>
            <select class="form-control" id="type" name="type">
                <option>White</option>
                <option>Brown</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="size">Printing:</label>
            <select class="form-control" id="color" name="color">
                <option value="1color">1 Color</option>
                <option value="2color">2 Color</option>
                <option value="4color">4 Color</option>
            </select>
        </div>
    </div>

    <!-- Customer Info Section -->
    <div class="section-title">Customer Information</div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
            <label for="customer_name"> Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter name">
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group col-md-4">
            <label for="contact">Contact</label>
            <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter phone number">
        </div>
    </div>

    <!-- File Upload -->
    <div class="file-upload">
        <input type="file" id="real-file" name="file" hidden>
        <button type="button" id="custom-button"><i class='bx bx-cloud-upload'></i> Upload your
            Artwork</button>
        <span id="file-name">No file chosen</span>
    </div>

    <!-- Comments Section -->
    <div class="form-group">
        <label for="comments">Comments</label>
        <textarea class="form-control" id="comments" name="comments" rows="4"></textarea>
    </div>

    <!-- Submit Button -->
    <button type="submit"
        class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-25">Submit</button>
</form>