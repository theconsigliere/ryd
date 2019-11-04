<div class="job-search-form-section">

    <form class='job-search-form1' method="GET" action="../job-search/">



        <div class="label-block">
            <label for="keywords">Job Title</label>
            <input class='job-search-input' type="text" id="search_keywords" name="search_keywords" />
        </div>

        <div class="label-block">
            <label for="keywords">Location</label>
            <input class='job-search-input' type="text" id="search_location" name="search_location" />
        </div>

        <div class="label-block">
            <label for="search_category">Category</label>
            <select id="search_category" name="search_category">
                <?php foreach (get_job_listing_categories() as $cat) : ?>
                <option value="<?php echo esc_attr($cat->term_id); ?>"><?php echo esc_html($cat->name); ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="label-block">
            <input class='job-search-input-search' type="submit" value="Search" />
        </div>



    </form>
</div>