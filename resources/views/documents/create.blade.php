<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #fafafa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        text-align: center;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        width: 280px;
    }

    h1 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #222;
    }

    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        outline: none;
        margin-bottom: 15px;
    }

    input:focus {
        border-color: #ff4d8d;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #ff4d8d;
        border: none;
        color: white;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.2s;
    }

    button:hover {
        background: #e8437a;
    }
</style>

<div class="card">
    <h1>Dokumen Baru</h1>

    <form action="/documents" method="POST">
        @csrf

        <input
            type="text"
            name="title"
            placeholder="Judul Document"
        >

        <button type="submit">
            Simpan Dokumen
        </button>
    </form>
</div>