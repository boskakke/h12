WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-12-23 10:04:01

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.8
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg.webp
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
- source: [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg.webp
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
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg.webp.lossy.webp'
File:      [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg
Dimension: 400 x 213
Output:    2384 bytes Y-U-V-All-PSNR 43.52 99.00 99.00   45.28 dB
           (0.22 bpp)
block count:  intra4:         72  (20.57%)
              intra16:       278  (79.43%)
              skipped:       264  (75.43%)
bytes used:  header:             97  (4.1%)
             mode-partition:    479  (20.1%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1756 |       0 |       0 |       0 |    1756  (73.7%)
 intra16-coeffs:  |       7 |       0 |       0 |      13 |      20  (0.8%)
  chroma coeffs:  |       1 |       0 |       0 |       1 |       2  (0.1%)
    macroblocks:  |      33%|       0%|       3%|      65%|     350
      quantizer:  |      39 |      34 |      26 |      20 |
   filter level:  |      11 |       7 |       4 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1764 |       0 |       0 |      14 |    1778  (74.6%)

Success
Reduction: 69% (went from 7791 bytes to 2384 bytes)

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
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg.webp.lossless.webp'
File:      [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546-400x213.jpg
Dimension: 400 x 213
Output:    6814 bytes (0.64 bpp)
Lossless-ARGB compressed size: 6814 bytes
  * Header size: 207 bytes, image data size: 6582
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   256

Success
Reduction: 13% (went from 7791 bytes to 6814 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 287 ms, reducing file size with 69% (went from 7791 bytes to 2384 bytes)
