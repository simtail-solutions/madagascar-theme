let sass = require('sass')
let package = require('./package.json')

module.exports = function (grunt) {
	let contributors = package.contributors.map(a => a.name)
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		authors: contributors.join(', '),

		themeHeader: '/* \n' +
			'   Theme Name: <%= pkg.nicename %>\n' +
			'   Theme URI: <%= pkg.homepage %>\n' +
			'   Author: <%= authors %>\n' +
			'   Author URI: https://simtail.com\n' +
			'   Description: <%= pkg.description %>\n' +
			'   Version: <%= pkg.version %>\n' +
			'*/\n\n',

		'dart-sass': {
			theme: {
				options: {
					sourceMap: true
				},
				files: {
					'./style.css': './src/style.scss',
				}
			}
		},

		usebanner: {
			theme: {
				options: {
					position: 'top',
					banner: '<%= themeHeader %>',
					linebreak: true,
				},
				files: {
					src: ['./style.css']
				}
			}
		},

		watch: {
			theme: {
				files: ['./src/*'],
				tasks: ['dart-sass:theme', 'usebanner'],
				options: { spawn: true }
			},
		},

		browserSync: {
			dev: {
				bsFiles: {
					src: './style.css'
				},
				options: {
					watchTask: true,
					proxy: {
						target: "https://simtail-testing.local:14433/"
					}
				}
			}
		}
	})

	grunt.loadNpmTasks('grunt-banner')
	grunt.loadNpmTasks('grunt-contrib-watch')
	grunt.loadNpmTasks('grunt-dart-sass')
	grunt.loadNpmTasks('grunt-browser-sync')

	grunt.registerTask('default', ['browserSync', 'watch'])
}