module.exports = {
  extends: ['stylelint-config-wordpress'],
  rules: {
    'at-rule-empty-line-before': ['always', {
      except: [
        'after-same-name',
        'inside-block'
      ]
    }],
    'at-rule-no-unknown': [true, {
      ignoreAtRules: [
        'tailwind',
        'apply',
        'variants',
        'responsive',
        'screen'
      ]
    }],
    'declaration-block-trailing-semicolon': null,
    'no-descending-specificity': null
  }
}
