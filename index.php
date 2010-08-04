<?php get_header (); ?>

    <div id="buttonBar">
      <div class="portalWidth">
        <ul>
          <li><a href="#">Link1</a></li>
          <li><a href="#">Link2</a></li>
          <li><a href="#">Link3</a></li>
        </ul>
      </div>
    </div>

    <div id="mainContent" class="portalWidth">

      <div id="noticiasInstitucionais">
        <h2>Notícias do Projeto</h2>
        <ul>
          <li>
            <strong>Suspendisse ac mattis felis.</strong>
            <em>04/08/10</em>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. Pellentesque ullamcorper dictum nisl, at tempus sem
              vestibulum at. Sed cursus tincidunt adipiscing.
            </p>
          </li>
          <li>
            <strong>Quisque ac ipsum leo, ac faucibus eros</strong>
            <em>04/08/10</em>
            <p>
              Pellentesque volutpat lorem in libero aliquet ut dignissim
              lacus faucibus. Vestibulum pretium aliquet arcu, et
              lobortis massa varius in. Ut porta mollis lorem et
              scelerisque.
            </p>
          </li>
          <li>
            <strong>Fusce non ipsum at lorem laoreet pulvinar</strong>
            <em>03/08/10</em>
            <p>
              Integer vitae quam ac magna venenatis faucibus ut vel
              elit. Cras facilisis lorem vitae purus feugiat non
              molestie mauris auctor. Vivamus dolor quam, luctus at
              consectetur pharetra, venenatis non dolor.
            </p>
          </li>
          <li>
            <strong>Aenean sed neque nunc</strong>
            <em>03/08/10</em>
            <p>
              Vestibulum ante ipsum primis in faucibus orci luctus et
              ultrices posuere cubilia Curae; Mauris gravida semper enim
              vitae egestas. Donec nulla est, fermentum at rhoncus eu,
              laoreet id elit. Aliquam malesuada urna et enim dictum
              pulvinar. Nam vitae volutpat dolor.
            </p>
          </li>
          <li>
            <strong>Ut eget iaculis risus</strong>
            <em>03/08/10</em>
            <p>
              Integer blandit metus id velit tempor tincidunt. Aenean
              nec augue mauris. Sed et urna nunc. Duis facilisis, enim
              vitae pharetra gravida, urna neque posuere metus, sed
              volutpat quam felis vitae odio.
            </p>
          </li>
        </ul>
      </div>

      <div id="noticiasDaRede">
        <h2>O que acontece na rede</h2>
        <ul>
          <li>
            <img src="avatar.png" alt="Avatar" />
            <strong>Lincoln de Sousa</strong>
            <em>04/08/2010</em>
            <p>
              Duis sodales tellus luctus ligula scelerisque quis
              volutpat tortor feugiat. Duis ante quam, interdum nec
              interdum tincidunt, placerat vel magna.
            </p>
          </li>

          <li>
            <img src="avatar.png" alt="Avatar" />
            <strong>Bleh</strong>
            <em>04/08/2010</em>
            <p>
              Suspendisse aliquam dictum tortor, vitae volutpat tellus
              blandit in. In suscipit justo vitae mi faucibus egestas.
            </p>
        </ul>
      </div>
      <div id="sidebar">
        <ul>
          <li>
            <h3>Conheça seu promotor</h3>
            <form id="buscaPid" method="post" action="#">
              <select name="estado">
                <option value="">----</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
              <input type="button" value="Busca" />
            </form>
          </li>
        </ul>
      </div>
    </div>

<?php get_footer (); ?>
