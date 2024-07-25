<!-- HTML code for the container -->
        <div class="container">
            <div class="content">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Enter Domain Address" value="<?php echo isset($_GET['domain']) ? esc_attr($_GET['domain']) : ''; ?>">
                    <button class="search-button">
                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Output container -->
            <div class="output-container"><?php echo $output; ?></div>
        </div>
        <style>
            /* CSS to style the container */
            .container {
                border-radius: 50px; /* More circular */
                background-color: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(5px); /* adjust the blur filter */
                box-shadow: 0 8px 16px rgba(0,0,0,0.3);
                padding: 20px;
                width: 1050px; /* Adjusted width */
                margin: 0 auto;
            }
            /* CSS to style the content inside the container */
            .content {
                font-size: 20px;
                text-align: center;
                color: #333;
            }
            /* CSS to style the search input and button */
            .search-container {
                display: flex;
                align-items: center;
            }
            .search-input {
                flex: 1;
                border: none;
                border-radius: 50px; /* More circular */
                padding: 15px; /* Taller */
                margin-right: 10px;
                width: 100%; /* Adjusted width */
            }
            .search-button {
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 50px; /* More circular */
                padding: 15px; /* Taller */
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            /* CSS to style the SVG icon */
            .search-icon {
                width: 24px;
                height: 24px;
                fill: white;
            }
            /* CSS to style the output box */
            .output-container {
                margin-top: 20px; /* Margin on top */
                font-weight: bold;
            }
        </style>