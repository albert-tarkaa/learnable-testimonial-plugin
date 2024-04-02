# Learnable Testimonial Plugin

The Learnable Testimonial Plugin is a simple yet powerful WordPress plugin that allows you to display testimonials on your website using a shortcode. This plugin is perfect for showcasing user reviews, customer feedback, or any kind of testimonial content in a visually appealing and organized manner.

## Installation

1. Download the latest release of the plugin from the [GitHub repository](https://github.com/albert-tarkaa/learnable-testimonial-plugin).
2. In your WordPress admin dashboard, navigate to **Plugins** > **Add New**.
3. Click the **Upload Plugin** button at the top of the page.
4. Select the downloaded ZIP file and click **Install Now**.
5. Once the installation is complete, click **Activate Plugin**.

Alternatively, you can install the plugin manually by following these steps:

1. Download the latest release of the plugin from the [GitHub repository](https://github.com/albert-tarkaa/learnable-testimonial-plugin).
2. Unzip the downloaded file.
3. Upload the `learnable-testimonial` directory to the `/wp-content/plugins/` directory of your WordPress installation.
4. In your WordPress admin dashboard, navigate to **Plugins** and activate the **Learnable Testimonial Plugin**.

## Usage

After activating the plugin, you can use the `[learnable_testimonial]` shortcode in your posts, pages, or widget areas to display a testimonial. The shortcode accepts the following attributes:

- `image`: The URL of the image to be displayed with the testimonial.
- `title`: The title or heading of the testimonial.
- `description`: The main content or body of the testimonial.
- `author`: The name of the person or organization providing the testimonial.
- `designation`: The designation or role of the author (optional).

Here's an example usage:

```
[learnable_testimonial image="https://example.com/testimonial-image.jpg" title="Learnable Rocks!" description="I'm extremely impressed with the quality of courses and learning experience provided by Learnable. Highly recommended!" author="John Doe" designation="Software Engineer, Acme Corp"]
```

## Customization

The plugin includes a basic CSS stylesheet (`css/styles.css`) that you can customize to match the branding and design of your website. Simply locate the `styles.css` file in the plugin directory and modify the styles according to your preferences.

## Contributing

This plugin is open-source, and contributions are welcome! If you encounter any issues or have suggestions for improvements, please feel free to open an issue or submit a pull request on the [GitHub repository](https://github.com/albert-tarkaa/learnable-testimonial-plugin).

## License

The Learnable Testimonial Plugin is released under the [MIT License](https://opensource.org/licenses/MIT).