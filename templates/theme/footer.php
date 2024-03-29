<div class="hr">
  <div class="hr__centos-color-0"></div>
  <div class="hr__centos-color-1"></div>
  <div class="hr__centos-color-2"></div>
  <div class="hr__centos-color-3"></div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row">
      {% for section in httpd_navbar if section.name == "About" or section.name == "Community" %}
      <section class="links">
        <h6><i class="{{ section.icon }}"></i> {{ section.name }}</h6>
        <ul>
          {% for item in section.menu %}            
          <li><a href="{{ item.link }}">{{ item.name }}</a></li>
          {% endfor %}
        </ul>
      </section>
      {% endfor %}
      <section class="project">
        <h4>The CentOS Project</h4>
        <p class="lead">Community-driven free software effort focused around the goal of providing a rich base platform for open source communities to build upon.</p>
        <div class="lead social">
          {% for item in httpd_social %}
          <a href="{{ item.link }}"><i class="{{ item.icon }}"></i></a>
          {% endfor %}
      </div>
      </section>
    </div>
    <div class="row">
      <section class="copyright">
            <p>Copyright &copy; {{ httpd_copyright.year }} {{ httpd_copyright.author }} {% for item in httpd_copyright.legals %} | <a href="{{ item.link }}">{{ item.text }}</a>{% endfor %}</p>
      </section>
    </div>
  </div>
  <div id="topbtn" style="">
    <a href="#top"><button title="Page top" type="button" data-toggle="tooltip" class="btn btn-light"><i class="fas fa-arrow-up"></i></button></a>
  </div>
</footer>

<script src="{{ httpd_assets_url }}/assets/js/jquery.min.js"></script>
<script src="{{ httpd_assets_url }}/assets/js/bootstrap.min.js"></script>
<script src="{{ httpd_assets_url }}/assets/js/customization.js"></script>
</body>
</html>
