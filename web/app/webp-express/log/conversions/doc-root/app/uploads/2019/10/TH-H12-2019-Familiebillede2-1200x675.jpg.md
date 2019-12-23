WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-12-23 10:06:33

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.8
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg.webp.lossy.webp'
File:      [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg
Dimension: 1200 x 675
Output:    107088 bytes Y-U-V-All-PSNR 37.06 43.17 45.17   38.41 dB
           (1.06 bpp)
block count:  intra4:       2665  (82.64%)
              intra16:       560  (17.36%)
              skipped:        36  (1.12%)
bytes used:  header:            182  (0.2%)
             mode-partition:  12769  (11.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   82724 |     385 |     138 |      47 |   83294  (77.8%)
 intra16-coeffs:  |    1298 |     136 |      90 |     452 |    1976  (1.8%)
  chroma coeffs:  |    8215 |      94 |      51 |     479 |    8839  (8.3%)
    macroblocks:  |      83%|       2%|       1%|      14%|    3225
      quantizer:  |      31 |      25 |      16 |      16 |
   filter level:  |       9 |       6 |       3 |       7 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   92237 |     615 |     279 |     978 |   94109  (87.9%)

Success
Reduction: 43% (went from 183 kb to 105 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg.webp.lossless.webp'
File:      [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1200x675.jpg
Dimension: 1200 x 675
Output:    554134 bytes (5.47 bpp)
Lossless-ARGB compressed size: 554134 bytes
  * Header size: 4619 bytes, image data size: 549490
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: -196% (went from 183 kb to 541 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2817 ms, reducing file size with 43% (went from 183 kb to 105 kb)
