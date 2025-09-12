const modulesContainer = document.getElementById("modulesContainer");

    // Add Module
    document.getElementById("addModule").addEventListener("click", function() {
      const moduleHtml = `
        <div class="panel panel-default module">
          <div class="panel-heading clearfix">
            <span class="module-title"></span>
            <button type="button" class="btn btn-danger btn-xs pull-right remove-module">x</button>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label>Module Title</label>
              <input type="text" class="form-control module-input" placeholder="Enter module title">
            </div>
            <div class="contents"></div>
            <button type="button" class="btn btn-sm btn-primary addContent">Add Content +</button>
          </div>
        </div>
      `;
      modulesContainer.insertAdjacentHTML("beforeend", moduleHtml);
      renumberModules();
    });

    // Event delegation for removing module
    document.addEventListener("click", function(e) {
      if (e.target.classList.contains("remove-module")) {
        e.target.closest(".module").remove();
        renumberModules();
      }
    });

    // Event delegation for adding content
    document.addEventListener("click", function(e) {
      if (e.target.classList.contains("addContent")) {
        const moduleDiv = e.target.closest(".module");
        const contentsDiv = moduleDiv.querySelector(".contents");

        const contentHtml = `
          <div class="panel panel-info content-card">
            <div class="panel-heading clearfix">
              <span class="content-title"></span>
              <button type="button" class="btn btn-danger btn-xs pull-right remove-content">x</button>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label>Content Title</label>
                <input type="text" class="form-control content-input" placeholder="Content title">
              </div>
              <div class="form-group">
                <label>Video Source Type</label>
                <select class="form-control content-source">
                  <option value="">Choose...</option>
                  <option value="youtube">YouTube</option>
                  <option value="vimeo">Vimeo</option>
                  <option value="file">Direct Upload</option>
                </select>
              </div>
              <div class="form-group">
                <label>Video URL</label>
                <input type="text" class="form-control content-url" placeholder="Paste video URL">
              </div>
              <div class="form-group">
                <label>Video Length</label>
                <input type="text" class="form-control content-length" placeholder="HH:MM:SS">
              </div>
            </div>
          </div>
        `;
        contentsDiv.insertAdjacentHTML("beforeend", contentHtml);
        renumberModules();
      }
    });

    // Event delegation for removing content
    document.addEventListener("click", function(e) {
      if (e.target.classList.contains("remove-content")) {
        e.target.closest(".content-card").remove();
        renumberModules();
      }
    });

    // Renumber modules and contents + fix names
    function renumberModules() {
      const modules = document.querySelectorAll(".module");
      modules.forEach((module, i) => {
        module.querySelector(".module-title").textContent = "Module " + (i + 1);
        const moduleInput = module.querySelector(".module-input");
        moduleInput.name = `modules[${i}][title]`;

        const contents = module.querySelectorAll(".content-card");
        contents.forEach((content, j) => {
          content.querySelector(".content-title").textContent = "Content " + (j + 1);
          content.querySelector(".content-input").name = `modules[${i}][contents][${j}][title]`;
          content.querySelector(".content-source").name = `modules[${i}][contents][${j}][video_source_type]`;
          content.querySelector(".content-url").name = `modules[${i}][contents][${j}][video_url]`;
          content.querySelector(".content-length").name = `modules[${i}][contents][${j}][video_length]`;
        });
      });
    }