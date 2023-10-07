<div id="error-content">
    <h1 id="error-title">Puts... Algo deu errado!</h1>
    <div id="error-text">
        <p>Provavelmente a página que você está tentando acessar não existe.</p>
        <div id="see-products">
            <p>Para voltar a ver os nossos produtos:</p>
            <a href="/doces" id="btn-see-products">Ver produtos</a>
        </div>
        <p style="font-size: 18px">Caso isso seja um erro, favor <a href="/contato">entrar em contato</a>.</p>
    </div>
</div>
<img src="" alt="" id="error-img">
<style>
    main {
        min-height: calc(100vh - 2 * 64px);
        margin-inline: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 100px;
    }

    #error-content {
        width: 95%;
    }
    
    #error-title {
        font-size: 50px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-block: 20px;
    }

    #error-text {
        font-size: 22px;
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    #see-products {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    #btn-see-products {
        font-size: 25px;
        color: black;
        text-decoration: none;
        background-color: var(--basic-color);
        padding: 10px;
        border: 1px solid black;
    }
    
    #error-img {
        width: 400px;
        height: 300px;
    }

    @media only screen and (min-width: 500px) {
        main {
            margin-inline: 10px;
            flex-direction: row;
            justify-content: space-between;
            gap: 0;
        }

        #error-content {
            width: 80%;
        }
    }
    
    @media only screen and (min-width: 700px) {
        main {
            margin-inline: 25px;
        }

        #error-content {
            width: 60%;
        }
    }
</style>