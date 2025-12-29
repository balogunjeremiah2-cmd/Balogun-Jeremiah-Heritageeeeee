<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
       <style><br>
        /* General page layout */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Comprehensive Card Styling */
        .logout-card {
            background-color: white;
            border: 2px solid #ff5722; /* Blogger Orange Border */
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(255, 87, 34, 0.1);
            width: 350px;
        }

        /* Icon or Graphic (Optional decoration) */
        .user-avatar {
            width: 60px;
            height: 60px;
            background-color: #ff5722;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            margin: 0 auto 20px;
            font-weight: bold;
        }

        /* The success message */
        p {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        /* Button Styling */
        button {
            background-color: #ff5722; /* Blogger Brand Color */
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #e64a19; /* Darker orange on hover */
            box-shadow: 0 4px 12px rgba(230, 74, 25, 0.3);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <div class="logout-card">
        <!-- Optional: User Initial Icon -->
        <div class="user-avatar">B</div>

        <p>Congrats, you are logged in!</p> 

        <form action="/logout" method="POST">
            @csrf
            <button type="submit"> Log out </button>
        </form>
    </div></br>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: top;
            min-height: 100vh;
            margin: 0;
            padding:20px;
        }

        /* Container following your format */
        .post-card {
            background: white;
            border: 2px solid #ff5722; /* Blogger Orange */
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        h2 {
            color: #333;
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 22px;
            text-align: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Title Input Styling */
        input[type="text"] {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        /* Body Textarea Styling */
        textarea {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            outline: none;
            min-height: 150px; /* Makes it taller for writing */
            resize: vertical; /* Allows user to pull it down */
            transition: border-color 0.3s;
            font-family: inherit;
        }

        /* Focus States */
        input:focus, textarea:focus {
            border-color: #ff5722;
            box-shadow: 0 0 5px rgba(255, 87, 34, 0.1);
        }

        /* Button Styling */
        button {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s, transform 0.1s;
        }

        button:hover {
            background-color: #e64a19;
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>

    <div class="post-card">
        <h2> Create a new post </h2>
        
        <form action="/create-posts" method="POST">
            @csrf
            
            <input name="title" type="text" placeholder="Post Title" required>
            
            <textarea name="body" placeholder="Write your post here..." required></textarea>
            
            <button type="submit"> Create Post </button>
        </form>
    </div>
    <style>
    /* Main container for all posts */
    .posts-feed {
        max-width: 800px;
        margin: 40px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .feed-title {
        color: #333;
        font-size: 28px;
        border-bottom: 3px solid #ff5722; /* Brand Color Underline */
        display: inline-block;
        margin-bottom: 30px;
        padding-bottom: 5px;
    }

    /* Individual Post Card Styling */
    .post-card {
        background-color: #ffffff;
        border-left: 5px solid #ff5722; /* Brand Color Accent */
        padding: 25px;
        margin-bottom: 25px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    /* Hover effect to make it interactive */
    .post-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    /* Post Title */
    .post-card h3 {
        margin: 0 0 10px 0;
        color: #ff5722; /* Brand Color for Titles */
        font-size: 22px;
        text-transform: capitalize;
    }

    /* Post Body Text */
    .post-content {
        color: #555;
        line-height: 1.6;
        font-size: 16px;
        white-space: pre-line; /* Preserves line breaks from textarea */
    }

    .no-posts {
        text-align: center;
        color: #888;
        padding: 50px;
        background: #eee;
        border-radius: 8px;
    }
</style>

<div class="posts-feed">
    <h2 class="feed-title"> All Posts </h2>

    @forelse ($posts as $post)
        <div class="post-card">
            <h3>{{ $post['title'] }}</h3>
            <div class="post-content">
                {{ $post['body'] }}
                <p> <a href="/edit-post/{{ $post->id }}"> Edit </a> </p>
                <form action = "/delete-post/{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button> Delete </button>
            </div>
        </div>
    @empty
        <!-- Shows if there are no posts in the database -->
        <div class="no-posts">
            <p>No posts found. Start sharing your thoughts!</p>

        </div>
    @endforelse
</div>
    @else
   <br><style>
        /* General page styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* The container styled based on your format */
        .login-card {
            border: 1px solid #ddd;
            background-color: white;
            padding: 40px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding-left: 40px;
            padding-right: 40px;
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
            font-weight: 600;
        }

        /* Form layout */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Input styling */
        input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #ff5722; /* Blogger-inspired orange */
        }

        /* Button styling */
        button {
            padding: 12px;
            background-color: #ff5722;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #e64a19;
        }

        /* Helper links */
        .footer-links {
            margin-top: 20px;
            font-size: 13px;
            color: #777;
        }

        .footer-links a {
            color: #ff5722;
            text-decoration: none;
        }
    </style></br>

    <br><style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* The main login container */
        .login-container {
           /* border: 2px solid #ff5722;  Blogger Orange */
            background-color: white;
            padding: 40px;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-left: center;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 0px
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Input styling */
        input {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus {
            border-color: #ff5722;
            box-shadow: 0 0 5px rgba(255, 87, 34, 0.2);
        }

        /* Button styling */
        button {
            padding: 12px;
            background-color: #ff5722;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #e64a19;
            transform: translateY(-1px);
        }

        button:active {
            transform: translateY(0);
        }

        .footer-text {
            margin-top: 20px;
            font-size: 13px;
            color: #777;
        }

        .footer-text a {
            color: #ff5722;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2> VINTAGE BLOG LOGIN </h2>
        
        <!-- Action points to your login route -->
        <form action="/login" method="POST">
            @csrf
            
            <!-- Name Field -->
            <input type="text" name="loginname" placeholder="Name" required>
            
            <!-- Password Field -->
            <input type="password" name="loginpassword" placeholder="Password" required>
            
            <button> Log In </button>
        </form>
</head>
<body>

    <div class="login-card">
        <h2>VINTAGE BLOG REGISTRATION </h2>
        <form action="/register" method="POST">  
         @csrf
            <input name="name" type="text" placeholder="Name">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button> Register </button>
        </form>
    </div>
</form></br>
    @endauth
    
</body>
</html>