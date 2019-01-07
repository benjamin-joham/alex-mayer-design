Html Webpack Plugin:
<pre>
  Error: Child compilation failed:
  Module build failed (from ./node_modules/html-webpack-plugin/lib/loader.js):
  Error: ENOENT: no such file or directory, open '/Users/benjaminjoham/Sites/alex-wp/src/test.php':
  Error: ENOENT: no such file or directory, open '/Users/benjaminjoham/Sites/alex-wp/src/test.php'
  
  - compiler.js:79 childCompiler.runAsChild
    [alex-wp]/[html-webpack-plugin]/lib/compiler.js:79:16
  
  - Compiler.js:290 compile
    [alex-wp]/[webpack]/lib/Compiler.js:290:11
  
  - Compiler.js:547 hooks.afterCompile.callAsync.err
    [alex-wp]/[webpack]/lib/Compiler.js:547:14
  
  
  - Hook.js:154 AsyncSeriesHook.lazyCompileHook
    [alex-wp]/[webpack]/[tapable]/lib/Hook.js:154:20
  
  - Compiler.js:544 compilation.seal.err
    [alex-wp]/[webpack]/lib/Compiler.js:544:30
  
  
  - Hook.js:154 AsyncSeriesHook.lazyCompileHook
    [alex-wp]/[webpack]/[tapable]/lib/Hook.js:154:20
  
  - Compilation.js:1297 hooks.optimizeAssets.callAsync.err
    [alex-wp]/[webpack]/lib/Compilation.js:1297:35
  
  
  - Hook.js:154 AsyncSeriesHook.lazyCompileHook
    [alex-wp]/[webpack]/[tapable]/lib/Hook.js:154:20
  
  - Compilation.js:1288 hooks.optimizeChunkAssets.callAsync.err
    [alex-wp]/[webpack]/lib/Compilation.js:1288:32
  
  
  - Hook.js:154 AsyncSeriesHook.lazyCompileHook
    [alex-wp]/[webpack]/[tapable]/lib/Hook.js:154:20
  
  - Compilation.js:1283 hooks.additionalAssets.callAsync.err
    [alex-wp]/[webpack]/lib/Compilation.js:1283:36
  
  
  - Hook.js:154 AsyncSeriesHook.lazyCompileHook
    [alex-wp]/[webpack]/[tapable]/lib/Hook.js:154:20
  
  - Compilation.js:1279 hooks.optimizeTree.callAsync.err
    [alex-wp]/[webpack]/lib/Compilation.js:1279:32
  
  
  - Hook.js:154 AsyncSeriesHook.lazyCompileHook
    [alex-wp]/[webpack]/[tapable]/lib/Hook.js:154:20
  
  - Compilation.js:1216 Compilation.seal
    [alex-wp]/[webpack]/lib/Compilation.js:1216:27
  
  - Compiler.js:541 hooks.make.callAsync.err
    [alex-wp]/[webpack]/lib/Compiler.js:541:17
  
  
  - Compilation.js:1067 _addModuleChain
    [alex-wp]/[webpack]/lib/Compilation.js:1067:12
  
  - Compilation.js:983 processModuleDependencies.err
    [alex-wp]/[webpack]/lib/Compilation.js:983:9
  
  - next_tick.js:131 _combinedTickCallback
    internal/process/next_tick.js:131:7
  
  - next_tick.js:180 process._tickCallback
    internal/process/next_tick.js:180:9
  
</pre>