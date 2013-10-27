var opts = {
  container: 'epiceditor',
  textarea: 'epic',
  basePath: 'plugins/epiceditor/lib',
  clientSideStorage: false,
  theme: {
    base: '/themes/base/epiceditor.css',
    preview: '/themes/preview/github.css',
    editor: '/themes/editor/epic-dark.css'
  },
  string: {
    togglePreview: L.preview,
    toggleEdit: L.edit,
    toggleFullscreen: L.fullscreen
  },
  autogrow: false
};
var editor = new EpicEditor(opts).load();