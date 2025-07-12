<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Skill Swap Platform</title>
    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: white;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .login-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .filters {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            align-items: center;
        }

        .filter-select {
            padding: 10px 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: white;
        }

        .search-container {
            display: flex;
            gap: 10px;
        }

        .search-input {
            padding: 10px 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 300px;
        }

        .search-btn {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-btn:hover {
            background-color: #218838;
        }

        .profile-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #6c757d;
            text-align: center;
        }

        .profile-info {
            flex: 1;
        }

        .profile-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 5px;
        }

        .skill-tag {
            padding: 4px 8px;
            border-radius: 15px;
            font-size: 12px;
            color: white;
        }

        .skill-offered {
            background-color: #28a745;
        }

        .skill-wanted {
            background-color: #6c757d;
        }

        .skill-label {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .profile-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .request-btn {
            background-color: #17a2b8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .request-btn:hover {
            background-color: #138496;
        }

        .rating {
            font-size: 14px;
            color: #6c757d;
        }

        .stars {
            color: #ffc107;
            margin-right: 5px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
        }

        .pagination button {
            padding: 8px 12px;
            border: 1px solid #ddd;
            background-color: white;
            cursor: pointer;
            border-radius: 3px;
        }

        .pagination button.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination button:hover:not(.active) {
            background-color: #f8f9fa;
        }

        .sidebar-note {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 5px;
            padding: 10px;
            font-size: 12px;
            color: #856404;
            max-width: 200px;
        }

        @media (max-width: 768px) {
            .filters {
                flex-direction: column;
                align-items: stretch;
            }

            .search-container {
                flex-direction: column;
            }

            .search-input {
                width: 100%;
            }

            .profile-card {
                flex-direction: column;
                text-align: center;
            }

            .sidebar-note {
                position: relative;
                right: auto;
                transform: none;
                margin-top: 20px;
            }
        }

    </style>
    
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">Skill Swap Platform</div>
            <!-- <button class="login-btn" onclick="showLogin()">Login</button> -->
             <button class="login-btn" onclick="window.location.href='login.php'">Login</button>

        </div>
    </header>

    <div class="container">
        <div class="filters">
            <select class="filter-select" id="availabilityFilter">
                <option value="all">Availability</option>
                <option value="available">Available</option>
                <option value="busy">Busy</option>
                <option value="part-time">Part-time</option>
            </select>
            
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search skills..." id="searchInput">
                <button class="search-btn" onclick="searchProfiles()">Search</button>
            </div>
        </div>

        <div id="profilesContainer">
            <!-- Profiles will be populated here -->
        </div>

        <div class="pagination">
            <button onclick="changePage('prev')">&lt;</button>
            <button class="active" onclick="changePage(1)">1</button>
            <button onclick="changePage(2)">2</button>
            <button onclick="changePage(3)">3</button>
            <button onclick="changePage(4)">4</button>
            <button onclick="changePage(5)">5</button>
            <button onclick="changePage(6)">6</button>
            <button onclick="changePage(7)">7</button>
            <button onclick="changePage('next')">&gt;</button>
        </div>
    </div>

    

    <script src="script.js"></script>
</body>
</html>