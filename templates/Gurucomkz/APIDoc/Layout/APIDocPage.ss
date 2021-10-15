<% if UIMode == 'Redoc' %>
    <redoc spec-url="$Link('specs')"></redoc>
<% else %>
    <div id="swagger-ui"></div>
    <script>
        window.onload = function() {
            // Begin Swagger UI call region
            const ui = SwaggerUIBundle({
                url: "$Link('specs')",
                dom_id: '#swagger-ui',
                deepLinking: false,
                presets: [
                    SwaggerUIBundle.presets.apis,
                ],
                plugins: [
                    SwaggerUIBundle.plugins.DownloadUrl
                ],
            });
            // End Swagger UI call region

            window.ui = ui;
        };
    </script>
<% end_if %>
