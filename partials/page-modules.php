<?php // open wordpress loop
if (have_posts()) : while (have_posts()) : the_post();

		// are there any rows within within our flexible content?
		if (have_rows('page_content')) :

			// loop through all the rows of flexible content
			while (have_rows('page_content')) : the_row();

				// Candidates & Employers
				if (get_row_layout() == 'candidates_employers_section')
					get_template_part('partials/content', 'ce');

				// Are you looking Section?
				if (get_row_layout() == 'are_you_looking_section')
					get_template_part('partials/content', 'looking');


				// Testimonial Section?
				if (get_row_layout() == 'testimonial_section')
					get_template_part('partials/content', 'testimonial');


				// Blog Section
				if (get_row_layout() == 'blog_section')
					get_template_part('partials/content', 'blogs');

				// Newsletter Section
				if (get_row_layout() == 'newsletter_section')
					get_template_part('partials/content', 'newsletter');

				// We are Ryderslade Section
				if (get_row_layout() == 'we_are_ryderslade_section')
					get_template_part('partials/content', 'ryderslade');

				// Job search form
				if (get_row_layout() == 'job_search_form')
					if (get_sub_field('job_form')) :
						get_template_part('partials/job', 'search');
					endif;

				// Job listings form
				if (get_row_layout() == 'job_listings_form')
					get_template_part('partials/job', 'listings');


				// Text Sections
				if (get_row_layout() == 'text_sections')
					get_template_part('partials/content', 'text');

				// Show Important Buttons
				if (get_row_layout() == 'button_section')
					get_template_part('partials/content', 'button');


				// post a job
				if (get_row_layout() == 'job_post')
					get_template_part('partials/job', 'post');


				// Contact Form
				if (get_row_layout() == 'contact_form')
					get_template_part('partials/contact', 'form');

			endwhile; // close the loop of flexible content
		endif; // close flexible content conditional 

	endwhile;
endif; // close the WordPress loop 