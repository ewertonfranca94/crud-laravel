<section>
    <style>
        .form {
            width: 400px;
            margin: 0 auto;
        }

        .form label {
            display: block;
            margin-top: 10px;
        }

        .form input[type="text"],
        .form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form button {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <div class="form">
        <form method="POST" action="{{ route('posts.create') }}">
            @csrf
            <label for="title"><b>Título:</b></label>
            <input type="text" name="title" id="title">
            <label for="content"><b>Conteúdo:</b></label>
            <textarea name="content" id="content" rows="7"></textarea>
            <label for="author"><b>Autor:</b></label>
            <input type="text" name="author" id="author">
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>
