module.exports = {
  env: {
    browser: true,
    es6: true,
  },
  extends: [
    'plugin:vue/essential',
    'plugin:vue/base',
    'plugin:vue/recommended',
    'plugin:vue/strongly-recommended',
    'airbnb-base',
  ],
  globals: {
    Atomics: 'readonly',
    SharedArrayBuffer: 'readonly',
  },
  parserOptions: {
    ecmaVersion: 2018,
    sourceType: 'module',
  },
  plugins: [
    'vue',
  ],
  rules: {

    "import/no-extraneous-dependencies": ["error", {
        "devDependencies": true,
        "optionalDependencies": false,
        "peerDependencies": false
    }],

    // Any JS
    "indent": ["error", 4], // indentation of 4 spaces
    "quotes": ["error", "double"], // use double quotes

    // Vue
    "vue/script-indent": ["error", 4, { "baseIndent": 1 }], // indentation of 4 spaces with base indentation of 1 level inside <script> tags
    "vue/html-indent": ["error", 4, { "baseIndent": 1 }], // indentation of 4 spaces with base indentation of 1 level inside <template> tags
    "vue/max-len": ["error", { // maximum characters per line
        "code": 80,
        "template": 80,
        "tabWidth": 4,
        "comments": 80,
        "ignorePattern": "",
        "ignoreComments": false,
        "ignoreTrailingComments": true,
        "ignoreUrls": true,
        "ignoreStrings": true,
        "ignoreTemplateLiterals": false,
        "ignoreRegExpLiterals": true,
        "ignoreHTMLAttributeValues": true,
        "ignoreHTMLTextContents": false,
    }],

  },
  overrides: [
    {
      files: ["*.vue"],
      rules: {
        "indent": "off", // disable "regular" eslint indent & prefer indent rules from vue plugin
        "max-len": "off" // disable "regular" eslint maximum length & prefer maximum length rules from vue plugin
      }
    }
  ]
};
